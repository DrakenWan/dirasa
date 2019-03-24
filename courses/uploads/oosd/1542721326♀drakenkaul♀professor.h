#ifndef professor_h
#define professor_h

#include "course.h"
#include "date.h"
#include "user.h"


class professor : public user {

 public:

     void setDetails();

     void showDetails();

     void updateCreds();

     void addCourse();


 private:
    date id;
    int credits;
    char qualification[400];
    //course courses;
};

#endif // professor_h
