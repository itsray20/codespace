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

  cout << " Erase() :" << endl;

  //-----------
  word1.erase(2, 3);
  word2.erase(2, 3);

  //-----------

  cout << "Word 1 Hello  :  " << word1 << endl;
  cout << "Word 2 Namaste : " << word2 << endl;
}

erase(): Deletes a substring of the string. Its time complexity is O(N) where
N is the size of the new string.