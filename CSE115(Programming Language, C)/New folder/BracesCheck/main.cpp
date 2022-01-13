#include<stdio.h>
#include<string.h>

struct Tour
{
    char location[50];
    float rating;
    double coOrdinate_x;
    double coOrdinate_y;
};

int main()
{
    char n;
    do
    {
        fflush(stdin);
        printf("Press Add or Show or Exit\n");
        scanf("%c",&n);

        switch(n)
        {
        case 'a':
        case 'A' :
        {
            FILE *fp=fopen("Tour.txt","a");
            struct Tour s;

            printf("Enter Location\n");
            scanf("%s",&s.location);

            printf("Enter Rating\n");
            scanf("%f",&s.rating);

            printf("Enter Coordinate of  Location x,y\n");
            scanf("%lf %lf",&s.coOrdinate_x,&s.coOrdinate_y);

            fprintf(fp,"\n%s %f %lf %lf\n",s.location,s.rating,s.coOrdinate_x,s.coOrdinate_y);


            fclose(fp);
            break;
        }
        case 's':
        case 'S':
        {
            FILE *fp=fopen("Tour.txt","r");
            struct Tour s1;
            while(fscanf(fp," %s %f %lf %lf",&s1.location,&s1.rating,&s1.coOrdinate_x,&s1.coOrdinate_y) != EOF)
            {
                printf("location name %s\t Rating %.1f\t \n",s1.location,s1.rating);
            }

            fclose(fp);
            break;
        }

        case 'e':
        case 'E':
        {
            printf("Exiting....\n");
            break;
        }
        }
    }while(n != 'e' && n!='E');
}
