def main():    
    file_raw = open('./2023-2024 - matura informatyk/advent-of-code/Day 1/info.txt', 'r')
    file_read = file_raw.read()
    file_list = file_read.split('\n')
    numer_list = []
    for n in range(len(file_list)):
        used_now_index = file_list[n]

        digits = []
        for char in used_now_index:
            if char.isdigit():
                digits.append(int(char))

        first_digit = digits[0]
        last_digit = digits[-1]
        combined_digits = int(str(first_digit) + str(last_digit))
        numer_list.append(combined_digits)
        
    print("number list: ",numer_list)
    
    i = 0
    while i < len(numer_list):
        print(numer_list[i])
        sum = numer_list[i] + numer_list[i]
        resault = sum - numer_list[0]
        i += 1
    print("resault ",resault)


if __name__ == '__main__':
    main()