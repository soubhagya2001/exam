const apiUrl = "https://www.googleapis.com/books/v1/volumes?q=harry+potter";

async function fetchBooks() {
  const response = await fetch(apiUrl);
  const data = await response.json();
  const books = data.items;

  const booksContainer = document.getElementById("books");

  for (const book of books) {
    const card = document.createElement("div");
    card.classList.add("card");

    const title = document.createElement("h3");
    title.classList.add("card-title");
    title.textContent = book.volumeInfo.title;

    const author = document.createElement("p");
    author.classList.add("card-author");
    author.textContent = book.volumeInfo.authors.join(", ");

    card.appendChild(title);
    card.appendChild(author);

    booksContainer.appendChild(card);
  }
}

fetchBooks();
