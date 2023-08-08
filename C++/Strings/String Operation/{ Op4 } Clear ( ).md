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

  cout << " Clear() :" << endl;

  cout << " " << word1 + word2 << endl;
  word1.clear();
  cout << " " << word1 + word2 << endl;
}

clear(): Erases all the contents of the string and assign an empty string (“”)
of length zero. Its time complexity is O(1).