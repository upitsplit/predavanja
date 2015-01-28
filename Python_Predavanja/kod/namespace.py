# -*- coding: utf-8 -*-
"""
Created on Mon Dec 15 14:06:22 2014

@author: thinkpad
"""

print "modul name ", __name__
    
n = 20

def fcja1():
    n = 15
    print n, locals()
    
def fcja2():    
    global n
    print n, locals()
    n = 15
    print n, locals()

fcja1()
fcja2() 
#UnboundLocalError: local variable 'n' referenced before assignment