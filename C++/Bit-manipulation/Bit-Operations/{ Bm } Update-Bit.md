code : #bit-manipulation 

#include <iostream>
using namespace std;

int updatebit(int n,int position ,int value)
{
  int mask = ~(1<<value);
  n= (n & mask);
  return(n|(value<<position));
}

int main() 
{ 
  cout << updatebit(5,1,1)<<endl;        
}
