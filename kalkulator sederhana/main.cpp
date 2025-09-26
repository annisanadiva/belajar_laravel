#include <iostream>

using namespace std;

int main()
{
    int keliling, panjang, lebar;

    cout << "Masukkan Panjang: ";
    cin >> panjang;

    cout << "Masukkan Lebar: ";
    cin >> lebar;

    keliling = 2 * (panjang+lebar);
    cout << "Keliling Persegi Panjang = " << keliling;
    return 0;
}
