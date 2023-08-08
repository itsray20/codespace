code : #Strings 

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = " Hello ";
  string word2 = " Namaste ";
  cout << "\n";
  // Operations

  cout << " Empty() :" << endl;

  cout << "\n Before : \n";
  if (word1.empty()) {
    cout << " string is empty";
  } else {
    cout << " string is Not empty\n";
  }

  //-----------
  word1.clear();
  //-----------

  cout << "\n After : \n";
  if (word1.empty()) {
    cout << " string is empty";
  } else {
    cout << " string is Not empty";
  }
}

empty(): Returns a boolean value, true if the string is empty and false if the
string is not empty. Its time complexity is O(1).