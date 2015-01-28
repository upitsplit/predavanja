# -*- coding: utf-8 -*-
"""
Created on Mon Dec 15 11:42:11 2014

@author: thinkpad
"""

number = 100

guess = int(input('Enter an integer : '))

while guess != number:
    if guess < number:
        print('broj je veci, pokusaj ponovo')
        guess = int(input('Enter an integer : '))
       
    elif guess > number:
        print('broj je manji, pokusaj ponovo')
        guess = int(input('Enter an integer : '))
print('bravo!')