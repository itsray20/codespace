code: #Strings 

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = " Hello ";
  string word2 = " Namaste ";
  cout << "\n";
  // Operations

  cout << "Insert() :" << endl;

  cout << "Word : " << word1 << endl;
  cout << word1.insert(4, "123") << endl;
}

insert(): Inserts additional characters into the string at a particular position.
Its time complexity is O(N) where N is the size of the new string.

