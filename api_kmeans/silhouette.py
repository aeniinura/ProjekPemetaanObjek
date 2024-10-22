import pandas as pd
import numpy as np
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_samples, silhouette_score
from flask import Flask, request, jsonify
from flask_cors import CORS
import os

