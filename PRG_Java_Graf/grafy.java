public class grafy {

        public static void main(String[] args) {
            System.out.println("Ovoce 2020");
            int jablka = 10;
            int hrusky = 50;
            int melouny = 25;
            float pocet = 10; //Pocet hvezdicek
            float av; float bv; float cv; float max;
    
            if (jablka > hrusky) {
                max = jablka;
            } else {
                max = hrusky;
            }
            if (melouny > max) {
                max = melouny;
            }
            av = pocet * (jablka / max);
            System.out.print("jablka" + "|");
            for (int i = 0; i < av; i++) {
                System.out.print("#");
                }
            System.out.println(" " + jablka);
            
            bv = pocet * (hrusky / max);
            System.out.print("hrusky" + "|");
            for (int i = 0; i < bv; i++) {
                System.out.print("#");
            }
            System.out.println(" " + hrusky);
            
            cv = pocet * (melouny / max);
            System.out.print("melouny" + "|");
            for (int i = 0; i < cv; i++) {
                System.out.print("#");
            }
            System.out.println(" " + melouny);
        }
}
