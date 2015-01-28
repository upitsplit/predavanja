# -*- coding: utf-8 -*-
"""
Created on Mon Dec 15 13:07:35 2014

@author: thinkpad
"""
import math
m = 100
n = 120

#list
primes = [x for x in xrange(m, n) if all(x%y for y in xrange(2, min(x, int(math.sqrt(n)))))]
print(primes)

#set
primes = {x for x in xrange(m, n) if all(x%y for y in xrange(2, min(x, int(math.sqrt(n)))))}
print(primes)

#generator
primes = (x for x in xrange(m, n) if all(x%y for y in xrange(2, min(x, int(math.sqrt(n))))))
print([p for p in primes])

#tuple
primes = tuple((x for x in xrange(m, n) if all(x%y for y in xrange(2, min(x, int(math.sqrt(n)))))))
print(primes)