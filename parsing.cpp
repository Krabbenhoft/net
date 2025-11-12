#include <iostream>
#include <cstring>
#include <vector>
#include <string>
#include <iostream>

using namespace std;

int main()
{
    char buffer[1024] = {0};
    vector<string> tokens;
    char *temp, *t;
    bool quit = false;

    while (!quit)
    {
        cout << "Please enter a sentence: " << std::endl;
        cin.getline(buffer, 1024, '\n');

        // This is a duplicate of the data - deep copy
        temp = strdup(buffer);

        // It is now destroyed by strtok
        t = strtok(temp, " ");

        // Post condition: everything is stored in the tokens vector
        while (t != NULL)
        {
            tokens.push_back(t);

            // Need to reset
            t = strtok(NULL, 0);
        }

        // for(vector<string>::iterator iterator = tokens.begin(); iterator != tokens.end(); iterator++)
        // {
        //     cout << " " << *iterator << endl;
        //     if(strcmp(iterator->c_str(), "Quit") == 0)
        //     {
        //         quit = true;
        //     }
        // }

        vector<string>::iterator iterator;
        iterator = tokens.begin();
        if (strcmp(iterator->c_str(), "Length") == 0)
        {
            ++iterator;
            ++iterator;
            cout << "Length is: " << (iterator->c_str()) << endl;
        }

        // Return memory to system
        tokens.clear();

        std::cout << quit << std::endl;
    }

    return 0;
}