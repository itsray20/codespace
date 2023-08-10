code : #Strings 

#include <algorithm>
#include <iostream>
#include <string>
using namespace std;

int main() {
  string letters = "abcdefgh";
  //------Method 1
  cout << "\n\nConvert String into lowercase to uppercase : \n\n";
  cout << "initial string : " << letters << "\n\n";
  for (int i = 0; i < letters.size(); i++) {
    if (letters[i] >= 'a' && letters[i] <= 'z') {
      letters[i] -= 32;
    }
  }
  cout << "final string : " << letters << endl;
  //------------
  cout << "\n\nConvert String into uppercase to lowercase  : \n\n";
  cout << "initial string : " << letters << "\n\n";
  for (int i = 0; i < letters.size(); i++) {
    if (letters[i] >= 'A' && letters[i] <= 'Z') {
      letters[i] += 32;
    }
  }
  cout << "final string : " << letters << endl;

  //------Method 2 (Required #include (algorithm))
  cout << "\n\nConvert String into lowercase to uppercase : \n\n";
  transform(letters.begin(), letters.end(), letters.begin(), ::toupper);
  cout << "final string : " << letters << endl;
  //---------
  cout << "\n\nConvert String into uppercase to lowercase  : \n\n";

  transform(letters.begin(), letters.end(), letters.begin(), ::tolower);
  cout << "final string : " << letters << endl;
}