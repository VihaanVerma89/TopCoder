/*
 * Problem Statement
    
Little Johnny is in the first grade and just found out about addition. He quickly learned the addition table and is becoming bored in class, so he thinks of a game. The game consists of choosing an integer and summing its digits. If the result is a single digit, the game ends. Otherwise, Johnny repeats the process on the result until he gets a single digit.  For example, if Johnny starts with the number 12345, he will add the digits 1 + 2 + 3 + 4 + 5 to get 15. The result is not a single digit, so he will repeat the process to get 1 + 5 = 6. The new result is a single digit, so the game ends.  Johnny is curious to see if his computations are correct, so he asks you what the final result is for the number n.
Definition
    
Class:
DigitsSum
Method:
lastDigit
Parameters:
int
Returns:
int
Method signature:
int lastDigit(int n)
(be sure your method is public)
    

Constraints
-
n will be between 0 and 2147483647, inclusive.
Examples
0)

    
12345
Returns: 6
The example in the problem statement.
1)

    
6
Returns: 6
In this simple example, the sum of the digits is 6, so the game ends after just one step.
2)

    
999999999
Returns: 9
The sum of the digits is 9 + 9 + 9 + 9 + 9 + 9 + 9 + 9 + 9 = 81. The process is repeated once more to get 8 + 1 = 9, which is a single digit.
3)

    
213413512
Returns: 4

4)

    
314
Returns: 8

5)

    
2147483647
Returns: 1

This problem statement is the exclusive and proprietary property of TopCoder, Inc. Any unauthorized use or reproduction of this information without the prior written consent of TopCoder, Inc. is strictly prohibited. (c)2003, TopCoder, Inc. All rights reserved.
*/

public class DigitsSum 
{
	private int result = 0;
	public int lastDigit(int n)
	{
		result = n;
		while(numberOfDigits(sumDigits(result))!=1)
		{
			sumDigits(result);
		}
		
		return result;
	}
	
	private int sumDigits(int n)
	{
		int sum = 0;
		int temp;
		while(n!=0)
		{
			temp = n % 10;
			sum += temp;
			n = n  / 10;
		}
		result = sum;
		return (sum);
	}
	
	
	private int numberOfDigits(int n)
	{
		String temp = String.valueOf(n);
		return temp.length();
	}
	
	public static void main(String []args)
	{
		DigitsSum d = new DigitsSum();
		
		int n = 12345;
		System.out.println(n + " : " +d.lastDigit(n));
		
		n = 999999999;
		System.out.println(n + " : " +d.lastDigit(n));
		
		n = 213413512;
		System.out.println(n + " : " +d.lastDigit(n));
		
		n = 314;
		System.out.println(n + " : " +d.lastDigit(n));
		
		n = 2147483647;
		System.out.println(n + " : " +d.lastDigit(n));
	}
}
