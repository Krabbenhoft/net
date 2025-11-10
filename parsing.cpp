#include <iostream>
#include <cstring>
#include <vector>
#include <string>
#include <iostream>

using namespace std;

int main()
{
    char buffer[1024]={0};
    vector<string> tokens;
    char *temp, *t;
    bool quit = false;
    
    while(!quit)
    {
        cout << "Please enter a sentence: " << std::endl;
        cin.getline(buffer, 1024, '\n');

        //This is a duplicate of the data - deep copy
        temp = stringdup(buffer);

        //It is now destroyed by strtok
        t = strtok(temp, " ");

        //Post condition: everything is stored in the tokens vector
        while(t!=NULL)
        {
            tokens.push_back(t);

            //Need to reset
            t = strtok(NULL, 0);
        }

        for(vector<string>::iterator iterator = tokens.begin())
    }


    return 0;
}