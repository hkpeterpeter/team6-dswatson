/*create item_transaction table*/
CREATE TABLE myDB.ITEM_TRANSACTION (
BUSINESS_DATE NUMBER(38,0) DEFAULT NULL NULL ,
ORDER_NUMBER VARCHAR2(30) NULL ,
MEMBER_TRANSACTION_FLAG VARCHAR2(1) NULL ,
MEMBER_ID NUMBER(38,0) NULL ,
CONTACT_ID NUMBER(38,0) NULL ,
PRODUCT_ID NUMBER(38,0) NULL ,
STORE_ID NUMBER(38,0) NULL ,
ITEM_QUANTITY NUMBER(22,7) NULL ,
ITEM_AMOUNT NUMBER(22,7) NULL ,
ITEM_DISCOUNT_AMOUNT NUMBER(22,7) NULL );

/*create PRODUCT table*/
CREATE TABLE myDB.PRODUCT (
PRODUCT_ID NUMBER(38,0) NULL ,
BRAND_NAME VARCHAR2(100) NULL ,
PRODUCT_NAME VARCHAR2(255) NULL ,
BRAND_TYPE_NAME VARCHAR2(20) NULL ,
PRODUCT_HIER_LVL1 VARCHAR2(100)NULL ,
PRODUCT_HIER_LVL2 VARCHAR2(100) NULL ,
PRODUCT_HIER_LVL3 VARCHAR2(100) NULL);

/*Create MEMBER table*/
CREATE TABLE myDB.MEMBER (
MEMBER_ID NUMBER(38,0) NULL ,
AGE NUMBER(38,0) NULL ,
GENDER VARCHAR2(15) NULL ,
MAINLAND_CHN_MEMBER_IND VARCHAR2(100) NULL ,
ENROLMENT_DATE DATE NULL);

/*Create RFM table*/
CREATE TABLE myDB.RFM (
CONTACT_ID NUMBER(38,0) NULL ,
SEG_NAME VARCHAR2(100) NULL ,
SUB_SEG_NAME VARCHAR2(100) NULL ,
SEG_NUM	VARCHAR2(30) NULL ,
SEG_START_DT DATE NULL ,
SEG_END_DT DATE NULL);

/*Create LIFESTYLE Table*/
CREATE TABLE myDB.LIFESTYLE (
CONTACT_ID	NUMBER(38,0) NULL ,
SEG_NAME	VARCHAR2(100) NULL ,
SEG_NUM	VARCHAR2(30) NULL ,
SEG_START_DT	DATE NULL ,
SEG_END_DT	DATE NULL);

/*Create WEEK table*/
CREATE TABLE myDB.WEEK (
WK_IDNT	NUMBER(38,0) NULL ,
WK_START_DATE	NUMBER(38,0) NULL ,
WK_END_DATE	NUMBER(38,0) NULL
);

/*Create PRODUCT_MARGIN Table*/
CREATE TABLE myDB.PRODUCT_MARGIN(
PRODUCT_ID	NUMBER(38,0)  NULL ,
WK_IDNT	NUMBER(38,0) NULL ,
SALES_AMOUNT	NUMBER(22,7) NULL ,
ITEM_QUANTITY	NUMBER(22,7) NULL ,
GROSS_MARGIN	NUMBER(22,7) NULL ,
TOTAL_MARGIN	NUMBER(22,7) NULL
);

/*Create PRODUCT_ITEM Table*/
CREATE TABLE myDB.PRODUCT_ITEM(
PRODUCT_ID	NUMBER(38,0)   NULL ,
ITEM_KEY	NUMBER(38,0)   NULL
);

/*Create STORE_LOCATION Table*/
CREATE TABLE myDB.STORE_LOCATION(
STORE_ID	NUMBER(38,0)  NULL ,
LOC_KEY	NUMBER(38,0) NULL
);

/*Create STORE Table*/
CREATE TABLE myDB.STORE(
STORE_ID	NUMBER(38,0)  NULL ,
LOC_NAME	VARCHAR2(128 CHAR)  NULL ,
ABBREVIATION	VARCHAR2(128 CHAR)  NULL ,
REGION	VARCHAR2(64 CHAR)  NULL ,
DISTRICT	VARCHAR2(64 CHAR)  NULL ,
CITY	VARCHAR2(64 CHAR)  NULL ,
TYPE	VARCHAR2(8 CHAR)  NULL ,
SEGMENT	VARCHAR2(32 CHAR)  NULL ,
NET_TRADING_AREA	NUMBER(32, 4)  NULL ,
GROSS_AREA	NUMBER(32, 4)  NULL ,
OPENING_DATE	TIMESTAMP(6)  NULL ,
LAST_UPDATE_DATE	TIMESTAMP(6)  NULL ,
CLOSING_DATE	TIMESTAMP(6)  NULL ,
CURRENCY_CODE	VARCHAR2(10 BYTE)  NULL
);

/*Create POG_PRODUCT Table*/
CREATE TABLE myDB.POG_PRODUCT(
ITEM_KEY	NUMBER(38,0) NULL ,
POG_KEY	NUMBER(38,0) NULL ,
LOC_KEY	NUMBER(38,0) NULL ,
FIXTURE_KEY	NUMBER(38,0) NULL ,
WK_IDNT	NUMBER(38,0) NULL ,
SALES_AMOUNT	NUMBER(22,7) NULL ,
SALES_UNIT	NUMBER(22,7) NULL ,
GROSS_MARGIN	NUMBER(22,7) NULL ,
TOTAL_MARGIN	NUMBER(22,7) NULL ,
POG_METERAGE	NUMBER(16, 10) NULL ,
ITEM_METERAGE	NUMBER(16, 10) NULL ,
POG_FIXTURE_EFFECTIVE_DATE	DATE  NULL ,
MODULE_DATE	DATE NULL
);

/*Create POG Table*/
CREATE TABLE myDB.POG(
POG_KEY	NUMBER(38, 0) NULL ,
POG_TYPE	VARCHAR2(8 BYTE) NULL ,
POG_DIVISION_CODE	VARCHAR2(30 BYTE) NULL ,
POG_DEPT_CODE	VARCHAR2(120 BYTE) NULL ,
STATUS	VARCHAR2(16 BYTE) NULL ,
POG_VERSION	VARCHAR2(64 BYTE) NULL ,
POG_DEPT_NAME	VARCHAR2(64 BYTE) NULL ,
POG_DIVISION_NAME	VARCHAR2(64 BYTE) NULL
);