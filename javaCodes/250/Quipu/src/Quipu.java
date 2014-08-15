public class Quipu
{

	public int readKnots(String knots)
	{
		int number = 0;
		int numberCount=0;

		if (knots.length() > 3)
		{
			for(int i=1; i < knots.length(); i++)
			{
				if(knots.charAt(i) == 'X')
				{
					numberCount++;
				}
				else if(knots.charAt(i) =='-')
				{
					number = (number * 10)+ numberCount;
					numberCount = 0;
				}
			}
		}
		return number;
	}

	public static void main(String[] args)
	{

		Quipu q = new Quipu();

		String knots;
		int number;

		knots = "-XX-XXXX-XXX-";

		number = q.readKnots(knots);
		System.out.println(knots + " : " + number);

		knots ="-XX--XXXX---XXX-";

		number = q.readKnots(knots);
		System.out.println(knots + " : " + number);

		knots ="-X-------";

		number = q.readKnots(knots);
		System.out.println(knots + " : " + number);
		
		knots ="-XXXXXXXXX--XXXXXXXXX-XXXXXXXXX-XXXXXXX-XXXXXXXXX-";

		number = q.readKnots(knots);
		System.out.println(knots + " : " + number);
	}
}
