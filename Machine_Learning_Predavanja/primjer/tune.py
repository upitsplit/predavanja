from sklearn.linear_model import LogisticRegression
from sklearn.neighbors import KNeighborsClassifier
from sklearn.grid_search import GridSearchCV
from sklearn.externals import joblib
from sklearn.cross_validation import cross_val_score
import numpy as np
from pprint import pprint

X = np.load('temp/features.npy')
y = np.load('temp/labels.npy')

#model = LogisticRegression(C = 0.001)    
model = KNeighborsClassifier()
#tuned = { 'n_neighbors': [1, 5, 10, 25, 50, 75, 100, 150] }
tuned = { 'n_neighbors': [43, 45, 47, 49, 51, 53, 55] }
cv = GridSearchCV(model, tuned, cv = 5, scoring = 'accuracy' )
cv.fit(X, y)

pprint(cv.grid_scores_)
print 'Best: ', cv.best_estimator_.get_params()

joblib.dump(cv.best_estimator_, 'temp/model.pkl')

model = cv.best_estimator_
cvscores = cross_val_score(model, X, y, cv = 5, scoring = 'accuracy' ) 
print cvscores
print cvscores.mean(),' +-', cvscores.std()
