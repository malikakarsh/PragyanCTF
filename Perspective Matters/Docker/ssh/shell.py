#!/usr/bin/python3
import os


def main():
    username = "sshUser"
    while True:
        x = input(f"\u001b[32m{username}@PragyanCTF\u001b[0m -> ")
        if x == 'exit':
            break

        elif x == 'ls':
            os.system("ls")

        elif x == 'pwd':
            os.system("pwd")

        else:
            print(f"Invalid argument: {x}")


if __name__ == '__main__':
    main()
