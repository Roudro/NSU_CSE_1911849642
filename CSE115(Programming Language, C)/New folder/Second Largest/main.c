#include <stdio.h>
#include <stdlib.h>

int find_second_largest_element(int *arr,int n)
{
    int max1,max2;
    max1 = max2 = 0;

    for(int i=0 ; i<n ; i++)
    {
        if(*arr > max1)
        {
            max2 = max1;
            max1 = *arr;
        }
        else if(*arr > max2 && *arr < max1)
        {
            max2 = *arr;
        }
        arr++;
    }
    for(int i=0 ; i<n ; i++)
    {
        if(arr[i] > max1)
        {
            max2 = max1;
            max1 = arr[i];
        }
        else if(arr[i] > max2 && arr[i] < max1)
        {
            max2 = *arr;
        }
    }
    return max2;
    //printf("max1=%d max2=%d",max1,max2);
}

int main()
{
    int arr[100],n;
    scanf("%d",&n);

    printf("Enter %d numbers => ",n);
    for(int i=0; i<n ; i++)
    {
        scanf("%d",&arr[i]);
    }

    int secondLargest = find_second_largest_element(arr,n);

    printf("Second largest number is => %d",secondLargest);

    return 0;
}
