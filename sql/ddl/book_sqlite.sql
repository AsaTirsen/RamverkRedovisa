--
-- Creating a sample table.
--



--
-- Table Book
--
DROP TABLE IF EXISTS Book;
CREATE TABLE Book (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "booktitle" TEXT NOT NULL,
    "author" TEXT NOT NULL,
    "imagelink" TEXT NOT NULL
);
