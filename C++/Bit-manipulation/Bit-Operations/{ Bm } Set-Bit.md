code : #bit-manipulation 

#include <iostream>
using namespace std;

int setbit(int n,int position)
{
  return (n|(1<<position));
}
int main() 
{ 
  cout << setbit(5,1)<<endl;        
}
