code : #Strings  

#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = "Hello";
  string word2 = "Namaste";
  cout << "\n";
  // Operations

  cout << "substr() :\n" << endl;

  cout << "Word : " << word1 << endl;
  cout << "size : " << word1.substr(2, 4) << "\n\n";

  cout << "Word : " << word2 << endl;
  cout << "size : " << word2.substr(3, 5) << "\n\n";
}


Substr(): Returns a string which is the copy of the substring. Its time
complexity is O(N) where N is the size of the substring. For example: