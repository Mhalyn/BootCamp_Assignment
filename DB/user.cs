using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Booking
{
    #region User
    public class User
    {
        #region Member Variables
        protected int _id;
        protected string _first_name;
        protected string _last_name;
        protected string _birthday;
        protected string _gender;
        protected string _email;
        protected int _phone;
        protected string _username;
        protected string _password;
        protected string _photo;
        #endregion
        #region Constructors
        public User() { }
        public User(string first_name, string last_name, string birthday, string gender, string email, int phone, string username, string password, string photo)
        {
            this._first_name=first_name;
            this._last_name=last_name;
            this._birthday=birthday;
            this._gender=gender;
            this._email=email;
            this._phone=phone;
            this._username=username;
            this._password=password;
            this._photo=photo;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string First_name
        {
            get {return _first_name;}
            set {_first_name=value;}
        }
        public virtual string Last_name
        {
            get {return _last_name;}
            set {_last_name=value;}
        }
        public virtual string Birthday
        {
            get {return _birthday;}
            set {_birthday=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual int Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Photo
        {
            get {return _photo;}
            set {_photo=value;}
        }
        #endregion
    }
    #endregion
}