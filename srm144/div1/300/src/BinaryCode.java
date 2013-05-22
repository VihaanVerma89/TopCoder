
public class BinaryCode
{
    public String[] decode(String message)
   {
           int messageLength = message.length();
           //return new String[] { decodeMessage(message, messageLength,0),
           //              decodeMessage(message,messageLength,1)};
           return new String [] {decodeMessage(message, messageLength, 0),
        		   decodeMessage(message, messageLength, 1)};
   }

   private String decodeMessage(String q, int messageLength,
                           int assumedFirstDigit)
   {
           StringBuilder p = new StringBuilder(messageLength);
           int firstDigit = assumedFirstDigit;
           int result = 0 ;

           p.append(firstDigit);

           for(int i = 0 ; i < messageLength -1; i++)
           {
                   int encodedDigit = Character.getNumericValue(q.charAt(i));
                   if ( i == 0 )
                	   {
                	   result = encodedDigit - firstDigit;
                   	   p.append(result);
                	   }
                   else
                   {
                	   result = encodedDigit - Character.getNumericValue(p.charAt(i-1))
                               - Character.getNumericValue(p.charAt(i));
                	   p.append(result);
                   }
                   if(result != 0 && result != 1)
            		   return "NONE";
           }

           return p.toString();
   }

public static void main(String[] args) {
   // TODO code application logic here
          BinaryCode bc = new BinaryCode();
		   String[] decoded = bc.decode("123210122");

           System.out.println("\n123210122:");
           for(String s : decoded)
               System.out.println(s);
          
           
		   decoded = bc.decode("11");

           System.out.println("\n11:");
           for(String s : decoded)
               System.out.println(s);
          
           
		   decoded = bc.decode("22111");

           System.out.println("\n22111:");
           for(String s : decoded)
               System.out.println(s);
          
           
		   decoded = bc.decode("123210120");

           System.out.println("\n123210120:");
           for(String s : decoded)
               System.out.println(s);
          
           
		   decoded = bc.decode("3");

           System.out.println("\n3:");
           for(String s : decoded)
               System.out.println(s);
          
           
		   decoded = bc.decode("12221112222221112221111111112221111");

           System.out.println("\n12221112222221112221111111112221111:");
           for(String s : decoded)
               System.out.println(s);
          
}
}

	
