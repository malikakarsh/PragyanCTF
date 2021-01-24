Send a POST request to the webpage: curl -X POST http://name_of_the_webpage
you will get a cipher in esolang brainfuck script.
Decrypt the cipher using dcode.

you get a flag.py script with two strings a cipher flag.
subrtact the ordinal numbers of each letter in string:

        s1 = "JdTlUzWk"
        s2 = "HaOeHiDL"
        for i in range(8):
            print(ord(s1[i]) - ord(s2[i]))

you will get: 2 3 5 7 13 17 19 31

On searching about these numbers you will get to know that these generate mersenne i.e a prime number of the form pow(2,n) - 1 where n = 2,3,5,7,13,17,19,31

generate the mersenes prime and the prime which is used here is pow(2,17) - 1 i.e 131071

Take this number and xor it with the first 6 letters of the cipher flag. You will get the random byte which when you xor with the whole cipher flag you will get the flag.
