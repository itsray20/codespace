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

  cout << " Assign :" << endl;
  cout << " \n word1 :" << word1 << " / word2 :" << word2;
  cout << "\n\n Replacing word2 with 'Good Morning !'\n\n";
  // method 1
  word2.assign("Good Morning !");

  cout << word1 + word2 << endl;
}

assign(): Assigns new string by replacing the previous value (can also be
done using ‘=’ operator).

