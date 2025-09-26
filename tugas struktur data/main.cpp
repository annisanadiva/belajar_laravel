#include <iostream>
using namespace std;

//fungsi void untuk untuk memanggil variabel kompres
void kompres(string a){
    int l = a.length();
    if(l == 1) a = a[0];
    string x = to_string(l);
    if(l > 1) a =a[0]+x;
    cout << a;
}

int main() {
    string s; //s sebagai variabel dari huruf yang kita input
    cout << "Masukkan huruf yang ingin dikompres: "; //menampilkan huruf yang kita input
    cin >> s;
    cout << "Hasil yang telah dikompres: " << s << endl; //menampilkan huruf yang kita input dan tampilan huruf inputan setelah dikompres

    int l = s.length();
    string a[l];
    int i = 1, j = 0;
    while(i < l) { //perulangan untuk menampilkan huruf yang diinput
        if(s[i] != s[i-1]) {
            a[j] = s.substr(0,i);
            s = s.erase(0,i);
            l = s.length();
            i = 0;
            j++;
        }
        i++;
    }
    a[j] = s; //menampilkan huruf yang hanya sekali diinput
    for(int i = 0; i <= j; i++) { //perulangan untuk mengompres huruf yang diinput
        kompres(a[i]);
    }
    return 0;
}
