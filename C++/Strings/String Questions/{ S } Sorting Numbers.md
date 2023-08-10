code : #Strings 

#include <algorithm>
#include <iostream>
#include <string>
using namespace std;
int main() {
  string numbers = "123456789";
  cout << "\n\n";
  cout << "Initial : " << numbers << endl;
  sort(numbers.begin(), numbers.end(), greater<int>());
  cout << "Final : " << numbers << endl;
  cout << "\n\n";
  cout << "Initial : " << numbers << endl;
  sort(numbers.begin(), numbers.end(), less<int>());
  cout << "Final : " << numbers << endl;
}