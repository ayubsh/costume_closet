CREATE TABLE loans (
  id        INT AUTO_INCREMENT PRIMARY KEY,
  item      VARCHAR(60) NOT NULL,
  borrower  VARCHAR(60) NOT NULL,
  due_date  DATE,
  returned  TINYINT(1) DEFAULT 0   -- 0 = still out, 1 = returned
);

