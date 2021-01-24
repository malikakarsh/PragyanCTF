XOR each image with a horizontally flipped image of itself.
Using tools like stegsolve scan the qr-code in each xored image.
You will get A_public,B_public,n,p and the two ciphers. (This is diffie-hellman key exchange algorithm.)
Using DLP calculate the private key and xor each byte of the private key with each byte of the cipher to get the flag.
