public static void main(String[] args) {
  int[] array = {1, 2, 2, 3, 6, 4, 4, 4, 9, 5, 6, 5, 9, 2};
  Duplicado.list = new int[array.length];
  for (int i = 0; i < array.length; i++) {
    int count = 0;
    for (int j = 0; j < array.length; j++) {
      if (array[i] == array[j]) {
        count++;
        if (Duplicado.numero(array[i])) {
          Duplicado.list[i] = array[i];
        }
      }
    }
    if (Duplicado.list[i] != 0) {
      System.out.println(Duplicado.list[i] + " se duplica " + count + " de veces");
    }
  }
}

public class Duplicado { 
   static int[] list; 
   static boolean numero(int num) { 
     for (int i = 0; i < list.length; i++) {
       if (list[i] == num) {
         return false; 
       } 
     } 
     return true; 
   } 
}