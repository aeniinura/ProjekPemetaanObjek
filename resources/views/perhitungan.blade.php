<x-app-layout>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proses Perhitungan ') }}  
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Iteration details -->
              
                    <div id="iteration-details">
                        <!-- Iteration details will be inserted here -->
                    </div>

                    <h1>Hasil Cluster</h1>
                 
                    <table id="data-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Objek Wisata</th>
                                <th>Jumlah Kunjungan (Orang)</th>
                                <th>Fasilitas</th>
                                <th>Aksesbilitas Kendaraan Umum</th>
                                <th>Harga Tiket Masuk (Rupiah)</th>
                                <th>Luas Wilayah (Hektar)</th>
                                <th>Cluster</th>
                            </tr>
                        </thead>
                        <tbody id="data-container">
                            <!-- Data will be inserted here -->
                        </tbody>
                    </table>

                    <div class="container mt-5">
                        <h2>Silhouette Values</h2>
                        <p>Rata - Rata Silhouette Coefficient: <span id="average-silhouette"></span></p>
                        <table id="silhouette-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Objek Wisata</th>
                                    <th>Silhouette Value</th>
                                </tr>
                            </thead>
                            <tbody id="silhouette-container">
                                <!-- Data akan diisi di sini oleh JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <script>
                        // Function to fetch JSON data
                        async function fetchData() {
                            try {
                                const response = await fetch('http://127.0.0.1:5000/cluster_data');
                                if (!response.ok) {
                                    throw new Error('Network response was not ok: ' + response.statusText);
                                }
                                const data = await response.json();
                                console.log('Data successfully fetched:', data); // Logging data
                                displayData(data);
                            } catch (error) {
                                console.error('There was a problem with the fetch operation:', error);
                                document.getElementById('data-container').innerText = 'Failed to load data: ' + error.message;
                            }
                        }

                        // Function to display JSON data in HTML table
                        function displayData(data) {
                            const container = document.getElementById('data-container');
                            const silhouetteContainer = document.getElementById('silhouette-container');
                            container.innerHTML = ''; // Clear existing content
                            data.Data.forEach((row, index) => {
                                const tr = document.createElement('tr');
                                tr.innerHTML = `
                                    <td>${row.No}</td>
                                    <td>${row.Nama_Objek_wisata}</td>
                                    <td>${row['Jumlah_kunjungan(orang)']}</td>
                                    <td>${row.Fasilitas}</td>
                                    <td>${row.Akesbilitas_Kendaraan_umum}</td>
                                    <td>${row['Harga_Tiket _Masuk(Rupiah)']}</td>
                                    <td>${row['Luas_Wilayah(Hektar)']}</td>
                                    <td>${row.Cluster}</td>
                                `;
                                container.appendChild(tr);
                                const trSilhouette = document.createElement('tr');
                                trSilhouette.innerHTML = `
                                    <td>${row.No}</td>
                                    <td>${row.Nama_Objek_wisata}</td>
                                    <td>${data.Silhouette_values[index]}</td>
                                `;
                                silhouetteContainer.appendChild(trSilhouette);
                            });

                            // Display iteration details
                            const iterationDetails = document.getElementById('iteration-details');
                            iterationDetails.innerHTML = '';
                            data.Iterations.forEach(iteration => {
                                const iterationTable = document.createElement('table');
                                iterationTable.classList.add('table', 'table-bordered', 'mb-4');
                                iterationTable.innerHTML = `
                                    <thead>
                                        <tr>
                                            
                                            <th>Jumlah Kunjungan (Orang)</th>
                                            <th>Fasilitas</th>
                                            <th>Aksesbilitas Kendaraan Umum</th>
                                            <th>Harga Tiket Masuk (Rupiah)</th>
                                            <th>Luas Wilayah (Hektar)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${iteration.Centroid_positions.map((centroid, idx) => `
                                            <tr>
                                                
                                                <td>${centroid[0]}</td>
                                                <td>${centroid[1]}</td>
                                                <td>${centroid[2]}</td>
                                                <td>${centroid[3]}</td>
                                                <td>${centroid[4]}</td>
                                                
                                            </tr>
                                        `).join('')}
                                    </tbody>
                                `;
                                const iterationDiv = document.createElement('div');
                                iterationDiv.innerHTML = `<h3>Centroid Iterasi ${iteration.Iteration}</h3>`;
                                iterationDiv.appendChild(iterationTable);
                                iterationDetails.appendChild(iterationDiv);
                            });

                            // Display cluster data for each iteration
                            data.Iterations.forEach(iteration => {
                                const clusterTable = document.createElement('table');
                                clusterTable.classList.add('table', 'table-bordered');
                                clusterTable.innerHTML = `
                                    <thead>
                                        <tr>
                                          
                                            <th>No</th>
                                            <th>Nama Objek Wisata</th>
                                            <th>Jumlah Kunjungan (Orang)</th>
                                            <th>Fasilitas</th>
                                            <th>Aksesbilitas Kendaraan Umum</th>
                                            <th>Harga Tiket Masuk (Rupiah)</th>
                                            <th>Luas Wilayah (Hektar)</th>
                                            <th>Cluster</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${data.Data.map(item => `
                                            <tr>
                                                <td>${item.No}</td>
                                                <td>${item.Nama_Objek_wisata}</td>
                                                <td>${item['Jumlah_kunjungan(orang)']}</td>
                                                <td>${item.Fasilitas}</td>
                                                <td>${item.Akesbilitas_Kendaraan_umum}</td>
                                                <td>${item['Harga_Tiket _Masuk(Rupiah)']}</td>
                                                <td>${item['Luas_Wilayah(Hektar)']}</td>
                                                <td>${item.Cluster}</td>
                                            </tr>
                                        `).join('')}
                                    </tbody>
                                `;
                                const clusterDiv = document.createElement('div');
                                clusterDiv.innerHTML = `<h3> Hasil Cluster Pada Perhitungan Iterasi ${iteration.Iteration}</h3>`;
                                clusterDiv.appendChild(clusterTable);
                                iterationDetails.appendChild(clusterDiv);
                            });

                            // Display average silhouette coefficient
                            document.getElementById('average-silhouette').innerText = data.Average_silhouette_coefficient;
                        }

                        // Call fetchData when the page loads
                        window.onload = fetchData;
                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
