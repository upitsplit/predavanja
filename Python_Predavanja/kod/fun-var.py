# -*- coding: utf-8 -*-
"""
Created on Fri Dec 12 16:22:11 2014

@author: thinkpad
"""

def fun(n, *args):
    print "args are ", type(args), args
    ret = []
    for i in args:
        ret.append(n**i)
    return ret
    
def fun2(n, **kwargs):
    print "kwargs are ", type(kwargs), kwargs
    ret = []
    for i in kwargs.values():
        ret.append(n**i)
    return ret
    
def main():
    print fun(2, 5, 6, 7, 8) 
    l = [1,2,3]
    print fun(2, *l)
    print fun2(2, a = 2, b = 3)
    dct = {'a':2, 'b':3}
    print fun2(2, **dct)
    
if __name__ == "__main__":
    main()