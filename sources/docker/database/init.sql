-- Use the created database
USE tenpoKanri;

CREATE TABLE tbl_employee (
EmployeeCode INT(11) AUTO_INCREMENT PRIMARY KEY,
EmployeeName VARCHAR(100) NOT NULL,
Email VARCHAR(100),
Password VARCHAR(100) NOT NULL,
PasswordHash VARCHAR(100) NOT NULL,
Role VARCHAR(100) NOT NULL
);

CREATE TABLE tbl_company (
CompanyCode INT(11) AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(100),
Furigana VARCHAR(100),
Abbreviation VARCHAR(100),
TaxRounding VARCHAR(20),
TaxTransfer VARCHAR(20),
AccountsPayableBalance INT(11),
BankCode VARCHAR(100),
PayeeBankName VARCHAR(100),
BankNameFurigana VARCHAR(100),
BranchCode VARCHAR(100),
MainBranchName VARCHAR(100),
BranchNameFurigana VARCHAR(100),
AccountType VARCHAR(100),
AccountNumber VARCHAR(100),
AccountHolder VARCHAR(100),
AccountHolderFurigana VARCHAR(100),
BreakpointA INT(11),
FeeA INT(11),
BreakpointB INT(11),
FeeB INT(11),
BreakpointC INT(11),
FeeC INT(11)
);

CREATE TABLE tbl_store (
StoreCode INT(11) AUTO_INCREMENT PRIMARY KEY,
StoreName VARCHAR(100) NOT NULL,
Address VARCHAR(100),
PhoneNumber VARCHAR(100),
Notes VARCHAR(100)
);

CREATE TABLE tbl_store_detail (
DetailId INT(11) AUTO_INCREMENT PRIMARY KEY,
StoreCode INT(11) NOT NULL,
DeliveryDate DATETIME NOT NULL,
CompanyCode INT(11) NOT NULL,
TaxTransfer VARCHAR(100),
Details VARCHAR(100),
TaxRate DOUBLE,
ExcludingTax INT(11),
IncludingTax INT(11),
FOREIGN KEY (StoreCode) REFERENCES tbl_store(StoreCode),
FOREIGN KEY (CompanyCode) REFERENCES tbl_company(CompanyCode)
);
