import pandas as pd
import numpy as np
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_samples, silhouette_score
from flask import Flask, request, jsonify
from flask_cors import CORS
import os

app = Flask(__name__)
CORS(app)

# Define the path to save the uploaded file
UPLOAD_FOLDER = 'uploads'
os.makedirs(UPLOAD_FOLDER, exist_ok=True)
FILE_PATH = os.path.join(UPLOAD_FOLDER, 'data_objek_wisata.xlsx')

# Upload and Overwrite Excel File
@app.route('/upload', methods=['POST'])
def upload_file():
    if 'file' not in request.files:
        return jsonify({'error': 'No file part in the request'}), 400
    file = request.files['file']
    if file.filename == '':
        return jsonify({'error': 'No file selected for uploading'}), 400
    if file and file.filename.endswith('.xlsx'):
        file.save(FILE_PATH)
        return jsonify({'message': 'File successfully uploaded and overwritten'}), 200
    else:
        return jsonify({'error': 'Allowed file types are .xlsx'}), 400


@app.route('/cluster_data', methods=['GET'])
def get_cluster_data():
    # Read the Excel file and select necessary columns from Sheet1
    excel_file = 'uploads/data_objek_wisata.xlsx'
    df = pd.read_excel(excel_file, sheet_name='Sheet1', usecols=['No', 'Nama_Objek_wisata', 'Jumlah_kunjungan(orang)', 'Fasilitas', 'Akesbilitas_Kendaraan_umum', 'Harga_Tiket _Masuk(Rupiah)', 'Luas_Wilayah(Hektar)'])

    # Select columns for clustering
    selected_columns = ['Jumlah_kunjungan(orang)', 'Fasilitas', 'Akesbilitas_Kendaraan_umum', 'Harga_Tiket _Masuk(Rupiah)', 'Luas_Wilayah(Hektar)']
    X = df[selected_columns]

    # Convert all values to numeric for KMeans
    X = X.apply(pd.to_numeric, errors='coerce')
    X = X.dropna()

    # Set initial centroid positions manually
    initial_centroids = np.array([
        [15881, 2, 2, 300000, 6],    # Centroid for cluster 1
        [1024, 2, 2, 15000, 22],     # Centroid for cluster 2
        [257, 2, 2, 10000, 1.5],     # Centroid for cluster 3
    ])

    # Initialize KMeans with the initial centroids
    num_clusters = 3
    max_iterations = 6  # Number of iterations to display
    kmeans = KMeans(n_clusters=num_clusters, init=initial_centroids, n_init=1)

    # Lists to store iteration details
    iterations_data = []

    # Perform K-Means clustering manually to track centroid positions
    centroids = initial_centroids
    for iter in range(max_iterations):
        kmeans = KMeans(n_clusters=num_clusters, init=centroids, n_init=1, max_iter=1)
        kmeans.fit(X)
        
        labels = kmeans.labels_
        centroids = kmeans.cluster_centers_

        # Save iteration details
        iteration_data = {
            'Iteration': iter + 1,
            'Centroid_positions': centroids.tolist(),
            'Cluster_labels': labels.tolist()
        }
        iterations_data.append(iteration_data)

    # Adjust cluster labels to start from 1
    df['Cluster'] = labels + 1

    # Calculate Silhouette Coefficient values
    silhouette_vals = silhouette_samples(X, labels)
    silhouette_avg = silhouette_score(X, labels)

    # Output in JSON format
    output = {
        "Jumlah_iterasi": max_iterations,
        "Average_silhouette_coefficient": silhouette_avg,
        "Silhouette_values": silhouette_vals.tolist(),
        "Iterations": iterations_data,
        "Data": df.to_dict(orient='records')
    }

    return jsonify(output)


if __name__ == '__main__':
    app.run(debug=True)
