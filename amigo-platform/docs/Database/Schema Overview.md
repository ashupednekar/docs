---
sidebar_position: 2
---

### ER Diagram (overview)

The following ER diagram depicts the main functional tables in **amigo-auth**

![alt:ER](https://bot.lebara.sa/images/generic/files/briefER.png)

### Login Master
This is the parent table representing every user in the database. It consists of the following fields

| Column name      | Field type |
| ------------ | ----------- | 
| chatbanking_id | TextField(validators=min/max length configurable) |
| rmn | PhoneNumberField(null=True, blank=True, unique=True) |
| email_address | EmailField(null=True, blank=True, unique=True) |
| alternate_number | PhoneNumberField(null=True, blank=True) |
| pin | CharField(max_length=255, validators=min/max length configurable) |
| kyc_level | IntegerField() |
| create_dt | DateTimeField(auto_now_add=True) |
| update_dt | DateTimeField(auto_now=True) |
| is_registered | CharField(max_length=1, default='Y') |
| is_blocked | CharField(max_length=1, default='N') |
| is_reset | CharField(max_length=1, default='N') |
| has_lost_phone | CharField(max_length=1, default='N') |
| block_reason | CharField(max_length=200, default='') |
| dereg_reason | CharField(max_length=200, default='') |
| reset_reason | CharField(max_length=200, default='') |
| kyc_change_reason | CharField(max_length=200, default='') |
| id_type | CharField(max_length=1, choices=AVL_IDS, null=True, blank=True) |
| id_number | CharField(max_length=20, null=True, blank=True) |
| name | CharField(max_length=100, null=True, blank=True) |
| secret_question | CharField(max_length=1, choices=AVL_QUESTIONS, null=True, blank=True) |
| secret_answer | TextField(null=True, blank=True) |

