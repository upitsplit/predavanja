from sklearn.externals import joblib
from sklearn.metrics import accuracy_score
import numpy as np

X = np.load('temp/features.npy')
y = np.load('temp/labels.npy')

logreg = joblib.load('temp/model.pkl')

p = logreg.predict(X)


print 'true predicted'
errcnt = 0
for i, (yp, pp) in enumerate(zip(y.tolist(), p.tolist())):    
    if yp != pp:
        print X[i,:], yp, pp 
        errcnt += 1

print float(errcnt) / len(y)

print accuracy_score(p, y)

