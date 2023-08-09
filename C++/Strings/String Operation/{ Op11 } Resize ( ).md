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

  cout << "Resize() :\n" << endl;

  cout << "Word : " << word1 << endl;
  word1.resize(4);
  cout << "Resize : " << word1 << "\n\n";
  cout << "Word : " << word2 << endl;
  word2.resize(4);
  cout << "Resize : " << word2 << "\n\n";
}

resize(): Resize the string to the new length which can be less than or
greater than the current length. Its time complexity is O(N) where N is the
size of the new string.