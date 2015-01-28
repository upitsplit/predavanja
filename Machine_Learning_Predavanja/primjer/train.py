from sklearn.linear_model import LogisticRegression
from sklearn.neighbors import KNeighborsClassifier
from sklearn.externals import joblib
import numpy as np

X = np.load('temp/features.npy')
y = np.load('temp/labels.npy')

print len(X[y == 'da']), len(X[y == 'ne'])

model = LogisticRegression(C = 0.001)    
#model = KNeighborsClassifier(n_neighbors = 3)
model.fit(X, y)

#print logreg.coef_, logreg.intercept_
joblib.dump(model, 'temp/model.pkl')
