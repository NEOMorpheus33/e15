'''Yes, it is possible to do it in the main class only. That will suffice.

'import java.util.Arrays;
import java.util.Scanner;
public class Main {
public static void main(String[] args) {
Scanner sc = new Scanner(System.in);
System.out.print("What length (in a whole number) would you like the array to be? ");
int arraySize = sc.nextInt();

int [] arr = new int[arraySize];
for (int i = 0; i < arraySize; i++) { int remainingNumbers=arraySize - i; System.out.println("Please enter " + remainingNumbers + " more integers."); arr[i]=sc.nextInt(); } System.out.print("Please enter a target value: ");
        int target = sc.nextInt();
        System.out.println(Arrays.toString(arr));

   // Algorithm here.

    }
}

Here's my code solution. Use your addition and subtraction problems here. 

import java.util.Scanner;
 
public class Exercise6 {
 
 public static void main(String[] args) {
  Scanner in = new Scanner(System.in);
   
  System.out.print(" Input first number: ");
  int num1 = in.nextInt();
   
  System.out.print(" Input second number: ");
  int num2 = in.nextInt();
   
 
  System.out.println(num1 + " + " + num2 + "=" + 
  (num1 + num2));
   
  System.out.println(num1 + " - " + num2 + "=" + 
  (num1 - num2));
   
  System.out.println(num1 + " x " + num2 + "=" + 
  (num1 * num2));
   
  System.out.println(num1 + " / " + num2 + "=" + 
  (num1 / num2));
 
  System.out.println(num1 + " mod " + num2 + "=" + 
  (num1 % num2));
 }
 
}


Input first number: 32                                                                                       
Input second number: 12                                                                                        
19 + 1 = 20
32 - 12 = 20
9+11= 20'  
  
''' 
