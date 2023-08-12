code : #bit-manipulation 

#include <iostream>
using namespace std;

bool ispower(int n)
{
  return(n && !(n&n-1));
}

int main() 
{ 
  cout<<ispower(16)<<endl;
 
 //optional
  if(ispower(17)==1)
  {
    cout<<"Given Number is Power of 2";
  }
  else 
  {
    cout<<"Given Number is Not Power of 2"<<endl;
    
  }
}