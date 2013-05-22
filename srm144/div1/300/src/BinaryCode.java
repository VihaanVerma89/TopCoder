
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

           for(int i = 0 ; i < messageLength; i++)
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
/*   String[] decoded = bc.decode("123210122");
   System.out.println("Decoded String with 0 : " + decoded[0]);
   System.out.println("Decoded String with 0 : " + decoded[1]);*/
          String[] decoded = bc.decode("3");
          System.out.println("Decoded String with 0 : " + decoded[0]);
          System.out.println("Decoded String with 0 : " + decoded[1]);
}
}

	
