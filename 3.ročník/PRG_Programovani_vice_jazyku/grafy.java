public class grafy {

        public static void main(String[] args) {
            System.out.println("Grafy");
            int jedna = 10;
            int dva = 50;
            int tri = 25;
            float pocet = 10; //Maximální počet hvězdiček
            float av; float bv; float cv; float max;
    
            if (jedna > dva) {
                max = jedna;
            } else {
                max = dva;
            }
            if (tri > max) {
                max = tri;
            }
            av = pocet * (jedna / max);
            for (int i = 0; i < av; i++) {
                System.out.print("*");
                }
            System.out.println(" " + jedna);
            
            bv = pocet * (dva / max);
            for (int i = 0; i < bv; i++) {
                System.out.print("*");
            }
            System.out.println(" " + dva);
            
            cv = pocet * (tri / max);
            for (int i = 0; i < cv; i++) {
                System.out.print("*");
            }
            System.out.println(" " + tri);
        }
}
