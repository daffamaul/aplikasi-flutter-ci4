class ApiUrl {
  static const String baseUrl = 'http://172.10.2.74/ci4-api-flutter/public';

  static const String registrasi = '$baseUrl/registrasi';
  static const String login = '$baseUrl/login';
  static const String listProduk = '$baseUrl/produk';
  static const String createProduk = '$baseUrl/produk';

  static String updateProduk(int id) => '$baseUrl/produk/$id/update';
  static String showProduk(int id) => '$baseUrl/produk/$id';
  static String deleteProduk(int id) => '$baseUrl/produk/$id';
}
