using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Customers
{
    #region Details
    public class Details
    {
        #region Member Variables
        protected int _id;
        protected string _product;
        protected string _meassage;
        protected string _stock;
        protected string _accept;
        protected string _color;
        protected string _size;
        protected string _shippingtype;
        #endregion
        #region Constructors
        public Details() { }
        public Details(string product, string meassage, string stock, string accept, string color, string size, string shippingtype)
        {
            this._product=product;
            this._meassage=meassage;
            this._stock=stock;
            this._accept=accept;
            this._color=color;
            this._size=size;
            this._shippingtype=shippingtype;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Product
        {
            get {return _product;}
            set {_product=value;}
        }
        public virtual string Meassage
        {
            get {return _meassage;}
            set {_meassage=value;}
        }
        public virtual string Stock
        {
            get {return _stock;}
            set {_stock=value;}
        }
        public virtual string Accept
        {
            get {return _accept;}
            set {_accept=value;}
        }
        public virtual string Color
        {
            get {return _color;}
            set {_color=value;}
        }
        public virtual string Size
        {
            get {return _size;}
            set {_size=value;}
        }
        public virtual string Shippingtype
        {
            get {return _shippingtype;}
            set {_shippingtype=value;}
        }
        #endregion
    }
    #endregion
}