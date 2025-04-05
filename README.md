# FLAMES
Accepts two inputs of a name, and then compute the compatibility of the two names into: F-Friends, L-Lovers, A-Anger, M-Married, E-Engaged, S-Soulmates.  Formula: get all the similar letter to the name then divide it to 6 and the result will the categorized into: F=1, L=2, A=3, M=4, E=5, S=0.

Examples:

1.Your Name: Rodrigo

Crush’s Name: Bong

Result: Rodrigo and Bong are Engaged.

Note: Their common letters are: O and G

“Rodrigo” has 3 common letters, “Bong” has 2 common letters Their total is 5; hence, E - Engaged



2. Your Name: Sara Duterte

Crush’s Name: Ferdinand Marcos Jr.

Result: Sara Duterte and Ferdinand Marcos Jr. are Engaged.

Note: Their common letters are: R, E, D, S, and A

“Sara Duterte” has 8 common letters, “Ferdinand Marcos Jr.” has 9 common letters Their total is 17 (modulo 6) is 5; hence E - Engaged
