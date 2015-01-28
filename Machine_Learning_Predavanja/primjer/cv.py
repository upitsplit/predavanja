from sklearn.externals import joblib
from sklearn.cross_validation import cross_val_score
import numpy as np

X = np.load('temp/features.npy')
y = np.load('temp/labels.npy')

model = joblib.load('temp/model.pkl')
cvscores = cross_val_score(model, X, y, cv = 5, scoring = 'accuracy' ) 
print cvscores
print cvscores.mean(),' +-', cvscores.std()
