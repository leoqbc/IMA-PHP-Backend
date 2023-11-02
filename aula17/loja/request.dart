


Future<http.Response> fetchAlbum() {
  return http.get(Uri.parse('http://localhost:8080/api/products'));
}