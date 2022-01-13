#include <stdio.h>
#include <stdlib.h>

int strlen(char* str)
{
    int count = 0;
    while(*str != '\0')
    {
        count++;
        str++;
    }
    return count;
}

int isPalindrome(char* str)
{
    int n = strlen(str);
    char *ptr, *rev;

    ptr = str;

    while (*ptr != '\0')
    {
        ++ptr;
    }
    --ptr;

    for (rev = str; ptr >= rev;)
    {
        if (*ptr == *rev)
        {
            --ptr;
            rev++;
        }
        else
            break;
    }

    if (rev > ptr)
        return 1;
    else
        return 0;
}

int main()
{
    char* str = "ABCCBA ABCCBA";

    int data = isPalindrome(str);
    //printf("\n\n\n%d\n\n\n",data);

    if(isPalindrome(str))
    {
        printf("%s is a palindrome",str);
    }
    else
    {
        printf("%s is not a palindrome",str);
    }

    return 0;
}
