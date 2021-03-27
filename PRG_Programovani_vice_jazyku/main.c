#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char** argv) {
    int n, i, m, l;
    printf("Kolik hodnot chces vkladat?:");

    scanf("%i", &n);
    int hodnoty[n];
    for (i = 0; i < n; i++) {
        printf("Zadej hodnotu %i:", i + 1);
        scanf("%i", &hodnoty[i]);
    }
    for (i = 0; i < n; i++) {
        printf(" \n", hodnoty[i]);
        for (l = 0; l < hodnoty[i]; l++) {
            printf("*");
        }
        printf ("%i");
    }
    return (EXIT_SUCCESS);
}

