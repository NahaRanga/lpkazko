import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error, r2_score

# Membuat data dummy
years = np.array([2020, 2021, 2022, 2023, 2024, 2025])
data = {
    'Tahun': years,
    'IMP': np.random.uniform(70, 90, 6),  # Index Mutu Pendidikan
    'TPT': np.random.uniform(5, 10, 6),   # Tingkat Pengangguran Terbuka
    'Inflasi': np.random.uniform(2, 5, 6), 
    'PDRB': np.random.uniform(4, 8, 6),   # Produk Domestik Regional Bruto
    'UMP': np.array([4200000, 4400000, 4600000, 4800000, 5000000, 5200000])  # UMP historis (dummy)
}

# Membuat DataFrame
df = pd.DataFrame(data)

# Memisahkan fitur dan target
X = df[['IMP', 'TPT', 'Inflasi', 'PDRB']]
y = df['UMP']

# Membagi data training dan testing
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Membuat dan melatih model
model = LinearRegression()
model.fit(X_train, y_train)

# Evaluasi model
y_pred = model.predict(X_test)
mse = mean_squared_error(y_test, y_pred)
r2 = r2_score(y_test, y_pred)

print("Model Performance:")
print(f"Mean Squared Error: {mse}")
print(f"R-squared Score: {r2}")

# Membuat prediksi untuk tahun 2026
# Menggunakan nilai dummy untuk 2026 (bisa disesuaikan dengan proyeksi aktual)
prediction_2026 = np.array([[
    85,    # IMP prediction
    7.5,   # TPT prediction
    3.5,   # Inflasi prediction
    6.5    # PDRB prediction
]])

ump_2026 = model.predict(prediction_2026)[0]
print(f"\nPrediksi UMP 2026: Rp {ump_2026:,.2f}")

# Menampilkan koefisien model
print("\nKoefisien model:")
for feature, coef in zip(['IMP', 'TPT', 'Inflasi', 'PDRB'], model.coef_):
    print(f"{feature}: {coef:,.2f}")
